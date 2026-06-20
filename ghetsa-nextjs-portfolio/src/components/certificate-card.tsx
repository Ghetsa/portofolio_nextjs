import Link from "next/link";
import type { Certificate } from "@/lib/site-data";

type Props = {
  certificate: Certificate;
};

export function CertificateCard({ certificate }: Props) {
  return (
    <Link
      href={`/certificates/${certificate.slug}`}
      className="group flex flex-col border-[3px] border-[#1b1b1b] bg-white shadow-[4px_4px_0_0_#1b1b1b] transition-transform duration-200 hover:-translate-y-1 hover:shadow-[8px_8px_0_0_#1b1b1b]"
    >
      <div className="flex h-40 items-center justify-center bg-[#fdb6e9]">
        <img src={certificate.image} alt={certificate.title} className="h-full w-full object-cover" />
      </div>
      <div className="p-5">
        <p className="text-xs font-bold uppercase tracking-[0.24em] text-[#556500]">{certificate.issueDate}</p>
        <h3 className="mt-3 font-display text-2xl font-bold">{certificate.title}</h3>
        <p className="mt-2 text-sm text-[#4f4f4f]">{certificate.issuer}</p>
      </div>
    </Link>
  );
}
