import Link from "next/link";
import { notFound } from "next/navigation";
import { ArrowLeft, Download, BadgeCheck } from "lucide-react";
import { DotGrid } from "@/components/dot-grid";
import { SiteHeader } from "@/components/site-header";
import { certificates, getCertificateBySlug } from "@/lib/site-data";

type Props = {
  params: Promise<{ slug: string }>;
};

export function generateStaticParams() {
  return certificates.map((certificate) => ({ slug: certificate.slug }));
}

export async function generateMetadata({ params }: Props) {
  const { slug } = await params;
  const certificate = getCertificateBySlug(slug);
  if (!certificate) return {};

  return {
    title: `${certificate.title} | Ghetsa.dev`,
    description: certificate.description,
  };
}

export default async function CertificateDetailPage({ params }: Props) {
  const { slug } = await params;
  const certificate = getCertificateBySlug(slug);
  if (!certificate) notFound();

  return (
    <div className="relative min-h-screen overflow-x-hidden bg-[#f7f7f3] text-[#1b1b1b]">
      <DotGrid />
      <SiteHeader />

      <main className="relative z-10 mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <Link
          href="/#certifications"
          className="mb-8 inline-flex items-center gap-2 rounded-full border-[3px] border-[#1b1b1b] bg-white px-5 py-3 font-bold shadow-[4px_4px_0_0_#1b1b1b]"
        >
          <ArrowLeft className="h-4 w-4" />
          Back to Home
        </Link>

        <section className="space-y-5">
          <h1 className="font-display text-4xl font-black leading-tight sm:text-5xl">{certificate.title}</h1>
          <div className="flex flex-wrap gap-4">
            <button className="inline-flex items-center gap-2 border-[3px] border-[#1b1b1b] bg-[#dfff00] px-6 py-4 font-black shadow-[4px_4px_0_0_#1b1b1b]">
              <BadgeCheck className="h-4 w-4" />
              Verify Credential
            </button>
            <button className="inline-flex items-center gap-2 border-[3px] border-[#1b1b1b] bg-white px-6 py-4 font-black shadow-[4px_4px_0_0_#1b1b1b]">
              <Download className="h-4 w-4" />
              Download PDF
            </button>
          </div>
        </section>

        <section className="mt-10 grid gap-4 lg:grid-cols-[1.3fr_0.95fr]">
          <div className="border-[3px] border-[#1b1b1b] bg-white p-4 shadow-[4px_4px_0_0_#1b1b1b]">
            <div className="aspect-[4/3] border-[3px] border-[#1b1b1b] bg-[#b8d9d9]">
              <img src={certificate.image} alt={certificate.title} className="h-full w-full object-cover" />
            </div>
          </div>

          <div className="space-y-4">
            <article className="border-[3px] border-[#1b1b1b] bg-[#fdb6e9] p-6 shadow-[4px_4px_0_0_#1b1b1b]">
              <h2 className="font-display text-3xl font-black underline decoration-4 underline-offset-8">About the Credential</h2>
              <p className="mt-4 text-base leading-8">{certificate.description}</p>
            </article>

            <article className="border-[3px] border-[#1b1b1b] bg-white p-6 shadow-[4px_4px_0_0_#1b1b1b]">
              <h2 className="font-display text-3xl font-black">Technical Metadata & Skills</h2>
              <div className="mt-6 space-y-4 border-t-[3px] border-[#1b1b1b] pt-6">
                <div className="flex items-center justify-between border-b-2 border-dotted border-[#1b1b1b] pb-2">
                  <span className="text-sm font-black uppercase tracking-wider text-[#555]">Issue Date</span>
                  <span className="font-bold">{certificate.issueDate}</span>
                </div>
                <div className="flex items-center justify-between border-b-2 border-dotted border-[#1b1b1b] pb-2">
                  <span className="text-sm font-black uppercase tracking-wider text-[#555]">Credential ID</span>
                  <span className="font-bold">{certificate.credentialId}</span>
                </div>
                <div className="flex items-center justify-between border-b-2 border-dotted border-[#1b1b1b] pb-2">
                  <span className="text-sm font-black uppercase tracking-wider text-[#555]">Issuer</span>
                  <span className="font-bold">{certificate.issuer}</span>
                </div>
              </div>
              <div className="mt-6 flex flex-wrap gap-2">
                {certificate.skills.map((skill) => (
                  <span key={skill} className="border-[2px] border-[#1b1b1b] bg-[#dfff00] px-4 py-2 text-xs font-black uppercase">
                    {skill}
                  </span>
                ))}
              </div>
            </article>
          </div>
        </section>
      </main>

      <footer className="mt-12 border-t-[3px] border-[#1b1b1b] bg-[#fdb6e9]">
        <div className="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-8 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
          <p className="font-display text-2xl font-black">GHETSA.DEV</p>
          <div className="flex gap-6 text-sm font-bold uppercase tracking-widest">
            <Link href="/#projects">GitHub</Link>
            <Link href="/#projects">LinkedIn</Link>
            <Link href="/#projects">Dribbble</Link>
          </div>
        </div>
      </footer>
    </div>
  );
}
